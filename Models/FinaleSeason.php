<?php

trait FinaleSeason
{
  public function finaleSeason($finaleSeasonYear)
  {
    if (!is_int($finaleSeasonYear)) {
      throw new Exception("in produzione");
    }
    return $finaleSeasonYear;
  }

  public function printFinaleSeason($finaleSeasonYear)
  {
    try {
      return $this->finaleSeason($finaleSeasonYear);
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
}