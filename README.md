# PHP Type Juggling Bug

This repository demonstrates a common, yet subtle, error in PHP related to its loose typing system and type juggling.  The `calculateSum` function is intended to add integers, however, due to PHP's implicit type conversions, a string value is treated as an integer which can lead to incorrect results.