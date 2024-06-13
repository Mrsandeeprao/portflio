<?php get_header(); ?>

<main>
    <h1>Welcome to My Portfolio</h1>
    <p>Hello! I am Sandeep D, a passionate WordPress Developer.</p>

    <h2>About Me</h2>
    <p>With over 4 years of experience in web development, I specialize in creating high-quality, responsive websites using WordPress, HTML5, CSS3, and JavaScript. My work includes theme customization, plugin integration, and performance optimization.</p>

    <h2>Projects</h2>
    <ul>
        <li><a href="#">Project 1</a></li>
        <li><a href="#">Project 2</a></li>
        <li><a href="#">Project 3</a></li>
    </ul>

    <h2>Skills</h2>
    <ul>
        <li>WordPress Development</li>
        <li>HTML5, CSS3, JavaScript</li>
        <li>Responsive Design</li>
        <li>SEO Optimization</li>
        <li>Version Control (Git)</li>
    </ul>
</main>

<?php get_footer(); ?>

<?php
/*
Template Name: About Me
*/
get_header(); ?>

<main>
    <h1>About Me</h1>
    <p>Hello! I am Sandeep D, a passionate WordPress Developer.</p>
    <p>With over 4 years of experience in web development, I specialize in creating high-quality, responsive websites using WordPress, HTML5, CSS3, and JavaScript. My work includes theme customization, plugin integration, and performance optimization.</p>
</main>

<?php get_footer(); ?>

<?php
/*
Template Name: Projects
*/
get_header(); ?>

<main>
    <h1>Projects</h1>
    <ul>
        <li><a href="#">Project 1</a></li>
        <li><a href="#">Project 2</a></li>
        <li><a href="#">Project 3</a></li>
    </ul>
</main>

<?php get_footer(); ?>


<?php
/*
Template Name: Skills
*/
get_header(); ?>

<main>
    <h1>Skills</h1>
    <ul>
        <li>WordPress Development</li>
        <li>HTML5, CSS3, JavaScript</li>
        <li>Responsive Design</li>
        <li>SEO Optimization</li>
        <li>Version Control (Git)</li>
    </ul>
</main>

<?php get_footer(); ?>

<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main>
    <h1>Contact</h1>
    <form action="https://formspree.io/f/{your-form-id}" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
</main>

<?php get_footer(); ?>

<?php
function my_portfolio_enqueue_styles() {
    wp_enqueue_style('my-portfolio-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_styles');
