module.exports = {
    client: 'mysql',
    connection: {
        host: 'localhost',
        database: 'auma',
        user:     'root',
        password: ''
    },
    pool: {
        min: 2,
        max: 10
    },
    migrations: {
        tableName: 'knex_migrations'
    }
  
  };
  