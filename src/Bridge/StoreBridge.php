<?php

namespace Thangphu\DesignPattern\Bridge;

class StoreBridge
{
    /**
     * @return string
     */
    public function showBook(): string
    {
        $colorRed = new RedColorBridge();
        $colorBlue = new BlueColorBridge();

        $note = new ShortBookBridge($colorBlue);
        $noteLove = new ShortBookBridge($colorRed);
        $novel = new LongBookBridge($colorRed);
        $lightNovel = new LongBookBridge($colorBlue);

        return $note->getInfo() . "\n" . $noteLove->getInfo() . "\n" . $novel->getInfo() . "\n" . $lightNovel->getInfo() . "\n";
    }
}
