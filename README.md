
# Fullstack Test

**##Backend**

```php
cd /backend
// If you wish to reset the database with initial data
php artisan migrate:refresh --seed
// The api endpoint is http://localhost:8000/api
https://gustavo.rootaccess.uk/backend/api/

// There is 2 endpoints created
RESOURCE: /users - CRUD
POST: /users
Params:
  name: string;
  email: string;
  password: string;
UPDATE: /users/{id}
Params:
  name: string;
  email: string;
  password: string;
DELETE: /users/{id}
INDEX: /users - all users stored
GET BY ID: /users/{1} - get user by id

-----------------------------------------

RESOURCE: /invoices
INDEX: /invoices - all invoices with users relationship
GET BY ID: /invoices/{id}

-----------------------------------------
```

**##Frontend**
ReactJs

