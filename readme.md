## Laravel Blog Test

Incomplete blog voor sollicitanten om hun Laravel skills te meten

#### Installatie ####

``git clone git@gitlab.qlic.nl:backend/blog-test.git``

``composer install``

``vendor\\bin\\homestead make``

``vagrant up`` (ook het IP in de hosts zetten als homestead.test)

``vagrant ssh``

``cd code``

``cp .env.example .env``

``art key:generate``

``art migrate``
