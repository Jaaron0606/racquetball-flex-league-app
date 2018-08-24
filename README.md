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
- [ ] Create many-to-many relationship between users table and matches table
- [ ] Update 'test' code to test new table structure
- [ ] Update 'test' code to populate match totals
- [ ] Refactor score display logic to use match score from table
- [ ] Testing idea: Write seeder to add in previous season data for one division.
- [ ] Add navigation bar and in-page links
- [ ] Build user's matches view with edit key