# Centaur

## Почему такое решение
- двойное наследование невозможно, особенно без изменения изначальных классов
- есть магический метод __call но как бдуто это не очень читаемо
- если вдруг кентавру понадобится изменить какие-то из методов под себя - это легко сделать

## Минусы
- при добавлении новых методов в "родительские" классы они не будут автоматически экспортированы в класс кентавра