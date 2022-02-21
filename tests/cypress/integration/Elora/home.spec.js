describe('Authentication', () => {
    it('signs a user in', () => {
        cy.refreshDatabase();

        cy.visit('/dashboard');



        cy.get('#email1')
            .type('fake@email.com')
            .should('have.value', 'fake@email.com')
    })
});