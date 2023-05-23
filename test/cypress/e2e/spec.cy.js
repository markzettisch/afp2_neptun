describe('visit', () => {
    it('passes', () => {
        cy.visit('http://127.0.0.1:8001')
    })
})

describe('login', () => {
    it('email', () => {
        cy.visit('http://127.0.0.1:8001')
        cy.get('#email').type("admin@admin.com")
        cy.get('#password').type("password")
        cy.get('.btn').click()

    })

})


describe('missing button', () => {
    it('missing button click', () => {
        cy.visit('http://127.0.0.1:8001')
        cy.get('.navbar-nav > :nth-child(1) > .nav-link').click()

    })
})

describe('buttons', () => {
    it('buttons click', () => {
        cy.visit('http://127.0.0.1:8001')
        cy.get('.align-items-xxl-end > .btn').click()
        cy.get('tr > :nth-child(4) > .btn').click()
        cy.get('#deletebutton').click()
        cy.get('form > .nav-link').click()

    })
})