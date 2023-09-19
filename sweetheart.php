<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $sweetheart = trim($name);
        $firstLetter = substr($sweetheart, 0, 1);
        return $firstLetter;
    }

    public function initial(string $name): string
    {
        $firstLetter = $this->firstLetter($name);
        $initial = strtoupper($firstLetter) . '.';
        return $initial;
    }

    public function initials(string $fullName): string
    {
        $names = explode(' ', $fullName);
        $firstInitial = $this->initial($names[0]);
        $lastInitial = $this->initial($names[1]);
        $initials = $firstInitial . ' ' . $lastInitial;
        return $initials;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials1 = $this->initials($sweetheart_a);
        $initials2 = $this->initials($sweetheart_b);

        $heart = "
         ******       ******
        **      **   **      **
      **         ** **         **
     **            *            **
     **                         **
     **      $initials1 + $initials2      **
      **                       **
        **                   **
          **               **
            **           **
              **       **
                **   **
                  ***
                   *
            ";
        return $heart;
    }
}

$love = new HighSchoolSweetheart();
echo $love->pair("Blake Miller", "Riley Lewis");
?>
