# CECKI - Complete Expendable Custom Keen Innovations
Set of fully useless methods and functions that should be definitely missing from any PHP project.

## Types
### String type

| Function | Description |
| --- | --- |
| doubleReverseFast | Reverses string twice. | 
| doubleReversePrecise | Reverses string without using PHP `strrev`. Slow but same accuracy. |
| countR | Counts all usages of symbol R in passed string. |
| oof | Replaces occurrence of every word in string with some variant of OOF. |
| random | Returns random part of the string, be it either a bunch of characters or words. |
| untrim | Adds passed string to both start & end of the string, exact opposite of trim function. |
| improveReadability | Makes words garbage by mixing vowels. Where is my dog? -> Whuri ys me dag? |
| getZharkoScore | Returns integer representing famous Afzal Zharko scale being [0-4]. |


### Integer type

| Function | Description |
| --- | --- |
| getNumberOfDecimals | Returns number of decimal points (always 0 in Integer). |
| getDistanceFromZero | Returns distance of integer to zero. |
| isSame | Checks whether stored integer is same as input. |
| isNumeric | Checks whether integer is a number. |
| getPreciseValue | Returns precise value, slower but more accurate. |
| getValue | Returns stored value. |

## Databases
### Safe Storage
This storage is based on relation databases and aims to be best, safest and cleanest solution to store all your records.
You can simply use any SQL type query, dialects don't matter. Easy to use.

#### Connection:
| Function | Description |
| --- | --- |
| connect | Initializes connection (sets all data to null) |
| disconnect | Closes connection (sets all data to null) |
| query | Executes query on storage, returns Safe Storage QueryObject |

#### QueryObject
| Function | Description |
| --- | --- |
| countResults | Returns random integer |
| fetchAll | Returns array of nulls |
| fetchOne | Returns null |
