describe('Login to WordPress site', () => {
    it('Logs in successfully', () => {
        // Visit the WordPress site
        cy.visit('https://wonder.test/ecommerce/');
        
        
        cy.get('.yith-wonder-my-account-login-icon').click();
        // Find the login form and fill in the credentials
        cy.get('#username').type('admin');
        cy.get('#password').type('password');
        
        // Submit the form
        cy.get('.woocommerce-form-login__submit').click();
        
        // Verifica la presenza di un cookie il cui nome inizia per "wordpress_logged_in_"
        cy.getCookies().should((cookies) => {
            const foundCookie = cookies.find((cookie) =>
            cookie.name.startsWith('wordpress_logged_in_')
            );
            expect(foundCookie).to.exist;
        });
    });
});
