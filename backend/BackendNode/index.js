const express = require('express')
const app = express()
/*const db = require('./config/db')

app.db = db
*/
app.listen(3000, () => {
    console.log('Backend executando...')
})