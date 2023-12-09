<?php

namespace PO\Lib;

class Common
{
    private $menu = [
        1 => [
            "Domov" => "index.php",
            "Portfólio" => "portfolio.php",
            "Q&A" => "qna.php",
            "Kontakt" => "kontakt.php"
        ]
    ];
    public function printRow(int $numOfRows, string $mainText, string $secondText): string
    {
        $html = "";
        for ($i = 0; $i < $numOfRows; $i++) {
            $html .= '<div class="row">
        <div class="col-50">
          <h2>'.$mainText.'</h2>
        </div>
        <div class="col-50">
          '.$secondText.'
        </div>
      </div>';
        }

        return $html;
    }

    public function getMenu(int $type): void
    {
        $printMenu = "";

        if($type === 1) {
            foreach ($this->menu[$type] as $menuName => $menuUrl) {
                $printMenu .= '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
            }
        } else {
            throw new \Exception('Nevalidne menu');
        }

        echo $printMenu;
    }

    public function getQnA(): void
    {
        $qnaContent = file_get_contents("data/qna.txt");
        $qna = explode(";", $qnaContent);
        $qnaCleared = array_filter($qna);
        $qnaTrimed = array_map('trim', $qnaCleared);
        $index = 1;
        $qnaFinal = [];
        foreach ($qnaTrimed as $value) {
            if($index % 2 === 0) {
                $qnaFinal[] = [
                    'q' => $qnaTrimed[$index-2],
                    'a' => $qnaTrimed[$index-1]
                ];
            }
            $index++;
        }

        foreach ($qnaFinal as $pair) {
            echo '<div class="accordion">
                <div class="question">'.$pair['q'].'</div>
                <div class="answer">'.$pair['a'].'</div>
              </div>';
        }
    }
}