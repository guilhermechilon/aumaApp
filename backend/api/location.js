const { check, validationResult } = require('express-validator/check');

module.exports = app => {

    const validation = [
        check('idStreet').trim().not().isEmpty().withMessage('Campo rua não pode ser vazio.'),
        check('idAvenue').trim().not().isEmpty().withMessage('Campo avenida não pode ser vazio.'),
        check('idFloor').trim().not().isEmpty().withMessage('Campo andar não pode ser vazio.'),
        check('idPosition').trim().not().isEmpty().withMessage('Campo posição não pode ser vazio.'),
    ]

    const save = (req, res) => {
        
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            return res.status(422).json({ errors: errors.array() });
        }
        
        app.db('location')
            .insert({ idStreet: req.body.idStreet, idAvenue: req.body.idAvenue, idFloor: req.body.idFloor, idPosition: req.body.idPosition })
            .then(_ => res.status(204).send())
            .catch(err => res.status(400).json(err))
    }

    const get = (req, res) => {

        app.db('location')
            .orderBy('id', 'desc')
            .then(location => res.json(location))
            .catch(err => res.status(400).json(err))
    }

    const update = (req, res) => {
        app.db('location')
            .where({ id: req.body.id })
            .update({ idStreet: req.body.idStreet, idAvenue: req.body.idAvenue, idFloor: req.body.idFloor, idPosition: req.body.idPosition })
            .then(_ => res.status(204).send())
            .catch(err => res.status(400).json(err))
    }

    const remove = (req, res) => {
        app.db('location')
            .where({ id: req.body.id })
            .del()
            .then(rowsDeleted => {
                if (rowsDeleted > 0) {
                    res.status(204).send()
                } else {
                    const msg = `Não foi encontrado localização com id ${req.body.id}.`
                    res.status(400).send(msg)
                }
            })
            .catch(err => res.status(400).json(err))
    }

    return { validation, get, save, update, remove }
}