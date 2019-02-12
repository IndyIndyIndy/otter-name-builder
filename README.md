# otter-name-builder
Generate names for otters.

So I was wondering what a society composed of intelligent otters would look like. 
What would they call themselves? What would be their names? Would they see us as enemies?

This is where the otter name builder comes into action:

``` php
$firstNamesFemale = NameListUtility::getNameList('FirstNamesFemale.txt');
$firstNamesMale = NameListUtility::getNameList('FirstNamesMale.txt');
$firstNames = array_merge($firstNamesFemale, $firstNamesMale);
$otterLastNames = NameListUtility::getNameList('OtterLastNames.txt');

$builder = new OtterNameBuilder(
    new GenericNameGenerator($firstNames, 4, 10), // the firstName
    new GenericNameGenerator($firstNames, 4, 10), // the middleName
    new GenericNameGenerator($otterLastNames, 4, 10) // the lastName
);

for ($i = 0; $i < 20; $i++) {
    echo $builder->getName() . "<br />\n";
}
```

Example output:

```
Angela Fluffytail 
Alyce Davis Potter 
Lawanda Helene Longtoes 
Sean Lutrinae 
Dominick Colette Slimbottom 
Numbers Paddleboat 
Wendell Mammal 
Cynthia Sharon Wettail 
Xavier Wetclaws 
Dewey Wetclaws 
Roxie Longboat 
Patti Longclaws 
Joesph Seabright 
Hosea Paws 
Terence Blake 
Rosa Candace Bluebottom 
Blaine Gillnetter 
Jules Slimbody 
Emma Fluffytoes 
Marvin Slimbody 
```


---------------------

*Now we know.*