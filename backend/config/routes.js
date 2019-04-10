module.exports = app => {
    app.post('/signup', app.api.user.validation, app.api.user.save)
    app.post('/signin', app.api.auth.signin)

    app.route('/forklift')
        //.all(app.config.passport.authenticate())   
        .get(app.api.forklift.get)
        .post(app.api.forklift.validation, app.api.forklift.save)
        .put(app.api.forklift.validation, app.api.forklift.update)
        .delete(app.api.forklift.remove)

    app.route('/typeCoffe')
        //.all(app.config.passport.authenticate())   
        .get(app.api.typeCoffe.get)
        .post(app.api.typeCoffe.validation, app.api.typeCoffe.save)
        .put(app.api.typeCoffe.validation, app.api.typeCoffe.update)
        .delete(app.api.typeCoffe.remove)

    app.route('/street')
        //.all(app.config.passport.authenticate())   
        .get(app.api.street.get)
        .post(app.api.street.validation, app.api.street.save)
        .put(app.api.street.validation, app.api.street.update)
        .delete(app.api.street.remove)

    app.route('/avenue')
        //.all(app.config.passport.authenticate())   
        .get(app.api.avenue.get)
        .post(app.api.avenue.validation, app.api.avenue.save)
        .put(app.api.avenue.validation, app.api.avenue.update)
        .delete(app.api.avenue.remove)

    app.route('/position')
        //.all(app.config.passport.authenticate())   
        .get(app.api.position.get)
        .post(app.api.position.validation, app.api.position.save)
        .put(app.api.position.validation, app.api.position.update)
        .delete(app.api.position.remove)
    
    app.route('/location')
        //.all(app.config.passport.authenticate())   
        .get(app.api.location.get)
        .post(app.api.location.validation, app.api.location.save)
        .put(app.api.location.validation, app.api.location.update)
        .delete(app.api.location.remove)
        
    app.route('/bag')
        //.all(app.config.passport.authenticate())   
        .get(app.api.bag.get)
        .post(app.api.bag.validation, app.api.bag.save)
        .put(app.api.bag.validation, app.api.bag.update)
        .delete(app.api.bag.remove)

}