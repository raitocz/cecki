# CECKI - Complete Expendable Custom Keen Innovations
Set of fully useless methods and functions that should be definitely missing from any PHP project.

## Types
### String type

| Function | Description |
| --- | --- |
| doubleReverseFast | Reverses string twice | 
| doubleReversePrecise | Reverses string without using PHP `strrev`. Slow but same accuracy |
| countR | Counts all usages of symbol R in passed string |
| oof | Replaces occurrence of every word in string with some variant of OOF |
| random | Returns random part of the string, be it either a bunch of characters or words |
| untrim | Adds passed string to both start & end of the string, exact opposite of trim function |
| improveReadability | Makes words garbage by mixing vowels. Where is my dog? -> Whuri ys me dag? |
| getZharkoScore | Returns integer representing famous Afzal Zharko scale being [0-4] |


### Integer type

| Function | Description |
| --- | --- |
| getNumberOfDecimals | Returns number of decimal points (always 0 in Integer) |
| getDistanceFromZero | Returns distance of integer to zero |
| isSame | Checks whether stored integer is same as input |
| isNumeric | Checks whether integer is a number |
| getPreciseValue | Returns precise value, slower but more accurate |
| getValue | Returns stored value |
