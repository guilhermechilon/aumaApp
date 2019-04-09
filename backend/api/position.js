module.exports = app => {

    const save = (req, res) => {
        
        app.db('position')
            .insert({ description: req.body.description })
            .then(_ => res.status(204).send())
            .catch(err => res.status(400).json(err))
    }

    return { save }
}