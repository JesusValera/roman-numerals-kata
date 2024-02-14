# Roman Numerals

## Rules:

Write a function that takes positive integers and outputs their string representation.

```php
interface RomanNumerals
{
    public function transformNumber(int $decimal): string;
}
```

## Units
| Symbol  | Decimal  |
| ------- | -------- |
| I       |    1     |
| V       |    5     |
| X       |   10     |
| L       |   50     |
| C       |  100     |
| D       |  500     |
| M       | 1000     |


## Number conversion
| Decimal  | Symbol   |
| -------- | -------- |
| 1        | I        |
| 2        | II       |
| 3        | III      |
| 4        | IV       |
| 5        | V        |
| 6        | VI       |
| 7        | VII      |
| 8        | VIII     |
| 9        | IX       |
| 10       | X        |
| 11       | XI       |
| 12       | XII      |
| 13       | XII      |
| 14       | XIV      |
| 15       | XV       |
| 16       | XVI      |
| 17       | XVII     |
| 18       | XVIII    |
| 19       | XIX      |
| 20       | XX       |

---

## PHP

1. Install [composer](https://getcomposer.org/) `curl -sS https://getcomposer.org/installer | php`
2. `composer install`
3. `vendor/bin/phpunit` o `composer test`

## Javascript

1. Install [Node](http://nodejs.org/)
2. `npm install`
3. `npm test`
