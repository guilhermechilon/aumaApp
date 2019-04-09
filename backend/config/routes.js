module.exports = app => {
    app.post('/signup', app.api.user.validation, app.api.user.save)
    app.post('/signin', app.api.auth.signin)

    app.post('/forklift', app.api.forklift.save)

    app.post('/typeCoffe', app.api.typeCoffe.save)

    app.post('/street', app.api.street.save)
    app.post('/avenue', app.api.avenue.save)
    app.post('/position', app.api.position.save)
}