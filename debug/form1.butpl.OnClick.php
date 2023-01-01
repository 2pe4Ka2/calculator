<?php if (!$GLOBALS["state"]) {
    $GLOBALS["num"] = c("valueLabel")->caption;
    $GLOBALS["state"] = true;
    c("valueLabel")->caption = 0;
    c("butPL")->enabled = false;
    c("butEQ")->enabled = true;
}
