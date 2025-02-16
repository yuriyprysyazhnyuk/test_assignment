import axios from 'axios'

const client = axios.create({
    headers: {
        'Access-Control-Allow-Origin': '*',
        'Content-Type': 'application/json',
        Accept: 'application/json, text/plain',
    },
})

export function getContactFormRoles() {
    return client.get('/api/contact-forms/roles')
}
export function sendContactForm(data) {
    return client.post('/api/contact-forms', data)
}
