// describe('Authentication', () => {
//     it('signs a user in', () => {
//         cy.refreshDatabase();

//         cy.visit('/login');



//         cy.get('#email1')
//             .type('fake@email.com')
//             .should('have.value', 'fake@email.com')
//     })
// });

// describe('My First Test', () => {
//     it('Visits the Kitchen Sink', () => {
//         cy.visit('https://example.cypress.io')
//         cy.contains('type').click()
//             // Should be on a new URL which includes '/commands/actions'
//         cy.url().should('include', '/commands/actions')

//         // Get an input, type into it and verify that the value has been updated
//         cy.get('#email1')
//             .type('fake@email.com')
//             .should('have.value', 'fake@email.com')
//     })
// })

describe('Authenticaation', () => {

    before(() => {
        // runs once before all tests in the block
    })

    beforeEach(() => {
        // runs before each test in the block
        cy.visit('/')
    })

    afterEach(() => {
        // runs after each test in the block
    })

    after(() => {
        // runs once after all tests in the block
    })


    it('will redirect to login page when visitors accessing home', () => {
        cy.visit('/')

        cy.url().should('contains', '/login')
    })

    it('will register a user', () => {
        cy.visit('/register')

        cy.get('input[name=name]').type('admin')
        cy.get('input[name=email]').type('user' + new Date().valueOf() + '@mail.com')
        cy.get('input[name=password]').type('password')
            // cy.get('input[name=password_confirmation]').type('password')

        cy.get('button').contains('Register').click()

        cy.url().should('contain', '/home')
    })

    it('will log in a user', () => {
        cy.create('User').then(user => {
            cy.visit('/login');

            cy.get('input[name="email"]').type(user.email);
            cy.get('input[name="password"]').type('password');
            cy.get('button[type="submit"]').click();

            cy.contains(user.name);
            cy.contains('You are logged in!');
        });
    })

    it('maintains user session', () => {
        cy.login();

        cy.visit('/home');

        cy.contains('You are logged in!');
    })
})