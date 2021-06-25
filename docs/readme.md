<h1 align="center">Helpers Statement: Documentation</h1>

### Methods

#### is
This is a comparison between argument one and argument three using argument two as the operator, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_Is::_Is([2, '>', 1]);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->Is([2, '>', 1]);
```

#### isAlwaysTrue
Returns a true value regardless of arguments
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsAlwaysTrue::_IsAlwaysTrue();

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsAlwaysTrue();
```

#### isAlwaysFalse
Returns a false value regardless of arguments
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsAlwaysFalse::_IsAlwaysFalse();

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsAlwaysFalse();
```

#### isLike
This is a like comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsLike::_IsLike(1, '1');

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsLike(1, '1');
```

#### isNotLike
This is a not like comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsNotLike::_IsNotLike(1, '2');

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsNotLike(1, '2');
```

#### isSame
This is a exact comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsSame::_IsSame(1, 1);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsSame(1, 1);
```

#### isNotSame
This is a not exact comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsNotSame::_IsNotSame(1, 2);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsNotSame(1, 2);
```

#### isMore
This is a greater than comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsMore::_IsMore(2, 1);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsMore(2, 1);
```

#### isMoreOrSame
This is a greater than or same comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsMoreOrSame::_IsMoreOrSame(2, 2);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsMoreOrSame(2, 2);
```

#### isLess
This is a less than comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsLess::_IsLess(1, 2);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsLess(1, 2);
```

#### isLessOrSame
This is a less than or same comparison between argument one and argument two, This returns a boolean indicated result.
```php
// Direct usage ( not intended )
Mossengine\Helpers\_Statement\_IsLessOrSame::_IsLessOrSame(2, 2);

// Mossengine Helper usage ( intended )
Mossengine\Helper::Statement()->IsLessOrSame(2, 2);
```
