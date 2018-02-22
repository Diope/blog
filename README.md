#Oooo Laravel!
------

Quick tinkering (get it...because php artisan tinker...) to get up to speed with Laravel after migrating from Rails.

Won't be hosting this or anything, it's just a playground of sorts. Feel free to look through it and take what you need. This readme serves as both notes on my observations of Laravel and also acts like my commit messages to state what part I've worked on.

### Feb 9th, 2018
I really like that Laravel comes out the box with node support (and it uses Vue, and Axios out the box, I love this as a JS developer!)


### Feb 4th, 2018
Artisan Tinker is basically Laravel's Rails -C command, great place to see if your Eloquent associations are correct, try out new queries, and to check what data is currently in the database.

Routes folder is interesting, your routes are separated by type. API, Web, Console. I think this is a great idea as far as separation of concerns and gives a team a clear idea of what the app will be.

* Added Post and user associations
* Added Post create, index, show, post views.


### Jan 27, 2018
Controller, Model, creation and shortcut commands are nearly identical between Rails and Laravel, I really like some of the built in features of Laravel that while I haven't really gone into just yet are still very great like Laravel Mix being a wrapper around Webpack (sidenote, I don't understand why people say Webpack is hard to learn). Mix is pretty straight forward in implementation.

I finally got Valet working correctly. Love this tool!

* Implemented the post controller, and routes as well as created layout partials.


### Jan 26, 2018
MVC architecture so it has much in common with others like it (Rails, and Django being ones I know and have experience with). Beyond that from first glance it seems it has much more in common with Rails than Django. Rails commandline commands and Artisan seem like a near 1:1 thus far and I find that to be pretty nice.

* Tinkered around with the built in user authentication/authorization system to understand how I change properties on it.

* Created the initial views for the blog application.