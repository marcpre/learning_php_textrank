<?php

require_once 'vendor/autoload.php';

use PhpScience\TextRank\TextRankFacade;
use PhpScience\TextRank\Tool\StopWords\English;

// String contains a long text, see the /res/sample1.txt file.
// https://www.cnbc.com/2019/11/25/asia-stocks-november-25-hong-kong-district-council-elections-currencies.html
$text = "Shares in Asia traded higher Monday afternoon, as investors watch market reaction to Hong Kong’s district council elections amid months of civil unrest in the city.  Hong Kong’s Hang Seng index led gains among major markets regionally as it jumped 1.76% by the afternoon, with shares of life insurer AIA surging 3.17%. The moves came after pro-democracy candidates surged to a landslide victory following a record voter turnout, Reuters reported.  That comes following months of civil unrest that have rocked the city and periodically degenerated into violence.  One analyst said the development was a “stunning victory” for pro-democracy candidates.  “I don’t think anyone expected this,” Fraser Howie, an independent analyst, told CNBC’s “Street Signs” on Monday. “Here is a very clear sign, three million Hong Kongers came out in a very orderly fashion, made their votes and sent a very clear signal to the establishment.”  “The message has been sent across the board, across almost every … constituency, is that there is great distrust and frustration with the government and with (Hong Kong Chief Executive) Carrie Lam,” Howie said.  Mainland Chinese stocks were mixed by the afternoon. The Shanghai composite rose 0.35%, while the Shenzhen component declined 0.49%. The Shenzhen composite also shed 0.803%. Elsewhere, the Nikkei 225 in Japan rose 0.74% in afternoon trade, with shares of index heavyweights Fast Retailing, Softbank Group and Fanuc all seeing gains.  South Korea’s Kospi also gained 1.05% as shares of industry heavyweight Samsung Electronics added more than 1%.  Meanwhile, stocks in Australia edged higher, as the S&P/ASX 200 gained about 0.4%.  Shares of Westpac, however, slipped 1.25%. The embattled lender announced its response plan over the weekend after Australia’s anti money-laundering and terrorism financing regulator last week filed for civil penalty orders against the firm, alleging its “oversight of the banking and designated services provided through its corresponding banking relationships was deficient.”  Among the list of actions detailed in the response plan were the immediate closure of an international funds transfer system and bolstering its financial crime monitoring efforts.  Overall, the MSCI Asia ex-Japan index traded 0.77% higher.  On the U.S.-China trade front, a “phase two” trade deal between the two economic powerhouses is unlikely to come soon, Reuters reported Monday citing officials, law makers and trade experts.  That comes as Washington and Beijing have yet to strike a “phase one” agreement ahead of Dec. 15, when additional tariffs on Chinese exports to the U.S. are set to kick in.  Paul Gruenwald, chief economist at S&P Global Ratings, told CNBC’s “Squawk Box” on Monday that the tariffs scheduled to go into effect Dec. 15 are “different” due to its potential impact on consumers.  “The first couple of rounds were in capital goods, so the supplier can take a hit or somebody in the supply chain can take a hit or maybe you nudge prices up a little bit,” Gruenwald said.  “If it’s consumer goods, then all of a sudden your nice iPhone or whatever in your pocket is 15%, 20% more and that hits the consumers directly,” he added. “That’s got a political element as well.”  Currencies and oil The U.S. dollar index, which tracks the greenback against a basket of its peers, was at 98.279 after rising from levels below 98.0 on Friday.  The Japanese yen traded at 108.76 against the dollar after seeing lows beyond 108.9 last week. The Australian dollar changed hands at $0.6796 after declining from highs above $0.682 in the previous trading week.  Oil prices rose in the afternoon of Asian trading hours, with international benchmark Brent crude futures adding 0.27% to $63.56 per barrel. U.S. crude futures also gained 0.21% to $57.89 per barrel.";

$api = new TextRankFacade();
// English implementation for stopwords/junk words:
$stopWords = new English();
$api->setStopWords($stopWords);

// Array of the most important keywords:
$result = $api->getOnlyKeyWords($text);

// Array of the sentences from the most important part of the text:
$result = $api->getHighlights($text);

// Array of the most important sentences from the text:
$result = $api->summarizeTextBasic($text);

print_r($result);