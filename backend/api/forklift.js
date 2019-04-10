const { check, validationResult } = require('express-validator/check');

module.exports = app => {

    const validation = [
        check('description').trim().not().isEmpty().withMessage('Campo descrição não pode ser vazio.')
    ]

    const save = (req, res) => {
        
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            return res.status(422).json({ errors: errors.array() });
        }
        
        app.db('forklift')
            .insert({ description: req.body.description })
            .then(_ => res.status(204).send())
            .catch(err => res.status(400).json(err))
    }

    const get = (req, res) => {

        app.db('forklift')
            .orderBy('id', 'desc')
            .then(forklift => res.json(forklift))
            .catch(err => res.status(400).json(err))
    }

    const update = (req, res) => {
        app.db('forklift')
            .where({ id: req.body.id })
            .update({ description: req.body.description })
            .then(_ => res.status(204).send())
            .catch(err => res.status(400).json(err))
    }

    const remove = (req, res) => {
        app.db('forklift')
            .where({ id: req.body.id })
            .del()
            .then(rowsDeleted => {
                if (rowsDeleted > 0) {
                    res.status(204).send()
                } else {
                    const msg = `Não foi encontrado empilhadeira com id ${req.body.id}.`
                    res.status(400).send(msg)
                }
            })
            .catch(err => res.status(400).json(err))
    }

    return { validation, get, save, update, remove }
}