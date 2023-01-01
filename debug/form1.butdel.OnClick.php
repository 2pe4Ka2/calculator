<?php if (c("valueLabel")->caption != 0) {
    c("valueLabel")->caption = substr(c("valueLabel")->caption, 0, -1);
    if (c("valueLabel")->caption == "") {
        c("valueLabel")->caption = 0;
    }
}
