describe('Authentication', () => {
    it('signs a user in', () => {
        // cy.refreshDatabase();

        cy.visit('/login');

        cy.get('#email')
            .type('sawmukahbaw191@gmail.com');
        cy.get('#password')
            .type('152433Edin@');
<<<<<<< HEAD:tests/cypress/integration/Elora/auth.spec.js

        cy.contains('button', 'Sign In').click();
    })

    it('Add Slider', () => {
        // cy.refreshDatabase();

        cy.get('#dashboard > .sub-menu > :nth-child(1) > .sidenav-item-link').click();

        cy.contains('button', 'Add Slider').click();

        cy.get('#exampleFormControlInput1')
            .type('Elora Music');

        cy.get('#exampleFormControlTextarea1')
            .type('With 3 studios and over 30 dedicated specialists, our in-house production team helps tell your brand story with powerful videos or stunning photography.');


        // const fixtureFile = 'saw.JPG';
        // cy.get('[data-cy="file-input"]').attachFile(fixtureFile);


=======
        
        cy.contains('button', 'Sign In').click();
        cy.contains('The provided credentials are incorrect');
>>>>>>> c360bf5a77ae85297ebd216d0b4bfbb9bca8e47d:tests/cypress/integration/auth.spec.js
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