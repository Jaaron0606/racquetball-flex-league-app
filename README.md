# racquetball-flex-league-app
Setting up a website for Sportsclub Racquetball Flex Leagues.

## To do in views-scaffold:
- [x] Review user stories priorities and define critical views
- [x] Create necessary view templates and prototype routing
- [x] Define static pages versus interactive pages
- [ ] Build 4 views
  - [x] Landing page (general league info)
  - [BELOW] Users league standings (logged in landing page)
  - [BELOW] Matches view with edit buttons (detail view with individual game scores)
  - [x] Match score enter view (form)
- [x] How to deal with hosting the database on Heroku alongside the app?
  * This could be sqlite, so we don't need a mySQL server
- [x] 19June: Research how to make a new Model / table in database and CRUD actions
- [x] 19June: Sketch out what will be in each of the views (from the data)
- [x] 24June: Verify match and game factories and create seeders
- [x] 24June: Test seeders
- [x] 24June: Build view with seeded data
- [x] 25June: Figure out why database relationships aren't working as defined.
  * Example in Laravel docs looks identical in structure, but doesn't work.
  * Turns out, I was missing a 'return' in the relationships definition.
  * Whoops.
- [x] 27June: Research how to use Eloquent ORM to query and filter database.

# New Alias! alias test='./vendor/bin/phpunit'

August 2
- [x] Add total match score column to match table, nullable
- [x] Tie users table to match table?
- [x] Seed database with 4 players, with round robbin matches

August 24
- [x] Create many-to-many relationship between users table and matches table
- [x] Update 'test' code to test   new table structure
- [x] Build user's matches view with edit key

September 5
- Added magoun@gmail.com user to database seeder to test userHome view.
    * Now I can log in (password = password) to test that the views are working.
    * This login will persist even on database resets, as long as the seeder runs.
- [x] Need to link matches and users, still
- [x] Need to add match totals to match table (seeder?)

September 16
- Turns out, for phpunit to run tests, the method names have to start with 'test'

September 17
- [x] Work with James on /matches route (userMatches view)
  * Generalize to logged in user instead of hard coding user 6
  * Refactor to controller and/or model.
- [x] Set up Edit key to link to score update view
- [x] Set up score update view to function (redirect back to /matches!?)
- [x] Add navigation bar and in-page links

September 21
- [x] Write MatchController@update to function with updateScores form
  * https://appdividend.com/2018/02/23/laravel-5-6-crud-tutorial/
  * View already shows current scores. Needs logic to update and redirect to match view.

September 25
- [x] Fix updateScores view layout (Bootstrap form?)
- [ ] Add functionality to upload a .csv to seed the database?
- [x] Refactor score display logic to use match score from table
- [ ] Add a count for matches played (logic?)
- [ ] Fix scoreboard css to not break general card css (Laravel built-in)