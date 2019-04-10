const { check, validationResult } = require('express-validator/check');

module.exports = app => {

    const validation = [
        check('idLocation').trim().not().isEmpty().withMessage('Campo localização não pode ser vazio.'),
        check('idTypeCoffe').trim().not().isEmpty().withMessage('Campo localização não pode ser vazio.'),
        check('lot').trim().not().isEmpty().withMessage('Campo lote não pode ser vazio.'),
        check('weight').trim().not().isEmpty().withMessage('Campo peso não pode ser vazio.'),
        check('producerName').trim().not().isEmpty().withMessage('Campo produtor não pode ser vazio.'),
        check('producerFarm').trim().not().isEmpty().withMessage('Campo fazenda não pode ser vazio.'),
        check('idCity').trim().not().isEmpty().withMessage('Campo cidade não pode ser vazio.'),
    ]

    const save = (req, res) => {
        
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            return res.status(422).json({ errors: errors.array() });
        }
        req.body.entryDate = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '')

        app.db('bag')
            .insert({ 
                    entryDate: req.body.entryDate,
                    idLocation: req.body.idLocation, 
                    idUser: req.body.idUser, 
                    lot: req.body.lot, 
                    weight: req.body.weight, 
                    producerName: req.body.producerName, 
                    producerFarm: req.body.producerFarm, 
                    idCity: req.body.idCity })
            .then(_ => res.status(204).send()
                /*async function insert() {
                    try {
                        const data = req.body.idTypeCoffe.map(x => {
                            app.db('bag')
                            .orderBy('id', 'desc')
                            .then(bag => res.json(bag))
                            .catch(err => res.status(400).json(err))

                            req.body.idBag = req.bag.id

                            return {
                                idTypeCoffe: req.body.idTypeCoffe,
                                idBag: req.body.idBag
                            };
                        });
                
                        await app.db('bag').insert(data)
                            .then(_ => res.status(204).send())
                            .catch(err => res.status(400).json(err));
                    } catch (err) {
                        console.log(err);
                    }
                }*/
            )
            .catch(err => res.status(400).json(err))

    }

    const get = (req, res) => {

        app.db('bag')
            .orderBy('id', 'desc')
            .then(bag => res.json(bag))
            .catch(err => res.status(400).json(err))
    }

    const update = (req, res) => {
        app.db('bag')
            .where({ id: req.body.id })
            .update({ idStreet: req.body.idStreet, idAvenue: req.body.idAvenue, idFloor: req.body.idFloor, idPosition: req.body.idPosition })
            .then(_ => res.status(204).send())
            .catch(err => res.status(400).json(err))
    }

    const remove = (req, res) => {
        app.db('bag')
            .where({ id: req.body.id })
            .del()
            .then(rowsDeleted => {
                if (rowsDeleted > 0) {
                    res.status(204).send()
                } else {
                    const msg = `Não foi encontrado saca com id ${req.body.id}.`
                    res.status(400).send(msg)
                }
            })
            .catch(err => res.status(400).json(err))
    }

    return { validation, get, save, update, remove }
}