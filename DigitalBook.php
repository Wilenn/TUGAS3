<?php

namespace Perpustakaan;

class DigitalBook extends Book
{
    public function download()
    {
        return "Buku digital dapat didownload";
    }
}