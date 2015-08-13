# Snipp

## VueJs

* v-show
```html
    <span v-show="isShow"></span>`
```

* v-if
```html
    <span v-if="! newSnippet.description">*</span>
```
* v-repeat

* v-class
```html
    <span v-class="
      red    : hasError,
      bold   : isImportant,
      hidden : isHidden
    "></span>`
```

* v-on
```html
    <button v-on="click: toggleLike"></button>`
```

* Custom Filter

```js
Vue.filter('my-filter', function (value) {
    //content 
});

// or

var vm = new Vue({
    
    el: "#demo",
    filters: {
        reverse: function(value){
            
        }
    }

})
```

* Computed

```js
var vm = new Vue({
    
    el: "#demo",
    
    data: {},
    computed: {
        fullName: {
            // the getter should return the desired value
            get: function () {
                return this.firstName + ' ' + this.lastName
            },
            // the setter is optional
            set: function (newValue) {
                var names = newValue.split(' ')
                this.firstName = names[0]
                this.lastName = names[names.length - 1]
            }
        }
    }
    //When you only need the getter, you can provide a single function instead of an object:
    computed: {
        fullName: function () {
            return this.firstName + ' ' + this.lastName 
        }    
    }
})
```


## Others

### Theme Jeffrey Way

Theme: Seti
ColorScheme: Facebook