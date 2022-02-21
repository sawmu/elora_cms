describe('Brand', () => {




    it('signs a user in', () => {
        // cy.refreshDatabase();

        cy.visit('/login');

        cy.get('#email')
            .type('sawmukahbaw191@gmail.com');
        cy.get('#password')
            .type('152433Edin@');

        cy.contains('button', 'Sign In').click();

        cy.get('#dashboard > .sub-menu > :nth-child(4) > .sidenav-item-link > .nav-text').click();

        cy.get(':nth-child(5) > :nth-child(1) > .btn').click();
    })









});