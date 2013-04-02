# UXMetrics

Module to help tracking if we are doing our job well :)

## Install

Unzip the `UXMetrics.zip` file into the sugarcrm folder.
(We'll improve this by using the module loader ;))

If you unzip it before installing, then it works out of the box, if is after, 
then you need to run Quick Repair and Rebuild from the Administration panel and 
make sure to run any SQL that you are prompted to execute at the end of the repair
process.

## Usage

Since we don't support the include of js files from the modules directly, for 
now you'll have the create another JS file that will be included on the `sidecar.tpl`. 
We'll try to make this work in a smoother way using the install out of the box.

The script will need to call these kind of functions anywhere on the application, 
based on the events that it listens too (e.g. any mouse click).

```javascript
// To search for an entry (whatever is unique for you)
App.api.records('read', 'UXMetrics', {
    email_addr: 'test@test.com',
    type: 4
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});

// To create records at will :)
App.api.records('create', 'UXMetrics', {
    email_addr: 'test@test.com',
    name: 'Vlad K',
    type: 4,
    clicks: 5,
    time: 45.32
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});

// you can now check that the record was saved
App.api.records('read', 'UXMetrics', {
    email_addr: 'test@test.com'
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});

// now imagine that you create 2 other records
App.api.records('create', 'UXMetrics', {
    email_addr: 'test@test.com',
    name: 'Vlad K',
    type: 2,
    clicks: 5,
    time: 45.32
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});
App.api.records('create', 'UXMetrics', {
    email_addr: 'test@test.com',
    name: 'Vlad K',
    type: 3,
    clicks: 5,
    time: 45.32
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});

// you can now see the 3 records for that user
App.api.records('read', 'UXMetrics', {
    email_addr: 'test@test.com'
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});

// or you can see only for the test that you are looking for:
App.api.records('read', 'UXMetrics', {
    email_addr: 'test@test.com',
    type: 3
}, null, {
    success: function(data) {
        console.log(data);
    },
    error: function() {
        // see if you want to do something here...
    }
});
```
