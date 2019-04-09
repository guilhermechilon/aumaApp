exports.user = [
    check('idTypeUser').exists().withMessage('Selecione o tipo de Usuário.'),
    check('name').exists().withMessage('Nome não pode ser vazio.'),
    check('email').isEmail().withMessage('Email não válido.'),
    check('password').isLength({ min: 6 }).withMessage('Mínimo de 6 caracteres.')
  ];