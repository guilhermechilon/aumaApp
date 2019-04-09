const bcrypt = require('bcrypt-nodejs')
const { check, validationResult } = require('express-validator/check');

module.exports = app => {
    const obterHash = (password, callback) => {
        bcrypt.genSalt(10, (err, salt) => {
            bcrypt.hash(password, salt, null, (err, hash) => callback(hash))
        })
    }

    const save = (req, res) => {
       
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            return res.status(422).json({ errors: errors.array() });
        }

        obterHash(req.body.password, hash => {
            const password = hash

            app.db('user')
                .insert({ idTypeUser: req.body.idTypeUser, name: req.body.name, email: req.body.email, password })
                .then(_ => res.status(204).send())
                .catch(err => res.status(400).json(err))
        })
    }

    return { save }
}