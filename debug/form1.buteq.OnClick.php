<?php if ($GLOBALS["state"]) {
    alert($GLOBALS["num"]." + ".c("valueLabel")->caption." = ".($GLOBALS["num"] + c("valueLabel")->caption));
    c("valueLabel")->caption = 0;
    $GLOBALS["state"] = false;
    c("butPL")->enabled = true;
    c("butEQ")->enabled = false;
}
