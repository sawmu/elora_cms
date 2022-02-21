describe('Authentication', () => {
    it('signs a user in', () => {
        // cy.refreshDatabase();

        cy.visit('/login');

        



        cy.get('#email')
            .type('sawmukahbaw191@gmail.com');
        cy.get('#password')
            .type('152433Edin@');
        
        cy.contains('button', 'Sign In').click();
        cy.contains('The provided credentials are incorrect');
    })
});

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

