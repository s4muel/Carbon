<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
\Symfony\Component\Translation\PluralizationRules::set(function ($number) {
    return $number === 1 ? 0 : 1;
}, 'uz');

/**
 * Authors:
 * - Inoyatulloh
 * - Jamshid
 * - aarkhipov
 */
return [
    'year' => ':count йил',
    'a_year' => 'бир йил|:count йил',
    'y' => ':count й',
    'month' => ':count ой',
    'a_month' => 'бир ой|:count ой',
    'm' => ':count о',
    'week' => ':count ҳафта',
    'a_week' => 'бир ҳафта|:count ҳафта',
    'w' => ':count ҳ',
    'day' => ':count кун',
    'a_day' => 'бир кун|:count кун',
    'd' => ':count к',
    'hour' => ':count соат',
    'a_hour' => 'бир соат|:count соат',
    'h' => ':count с',
    'minute' => ':count дакика',
    'a_minute' => 'бир дакика|:count дакика',
    'min' => ':count д',
    'second' => ':count фурсат',
    'a_second' => 'фурсат|:count фурсат',
    's' => ':count ф',
    'ago' => 'Бир неча :time олдин',
    'from_now' => 'Якин :time ичида',
    'after' => ':time пас аз он',
    'before' => ':time пеш аз он',
    'diff_yesterday' => 'Кеча',
    'diff_tomorrow' => 'Эртага',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD/MM/YYYY',
        'LL' => 'D MMMM YYYY',
        'LLL' => 'D MMMM YYYY HH:mm',
        'LLLL' => 'D MMMM YYYY, dddd HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[Бугун соат] LT [да]',
        'nextDay' => '[Эртага] LT [да]',
        'nextWeek' => 'dddd [куни соат] LT [да]',
        'lastDay' => '[Кеча соат] LT [да]',
        'lastWeek' => '[Утган] dddd [куни соат] LT [да]',
        'sameElse' => 'L',
    ],
    'months' => ['январ', 'феврал', 'март', 'апрел', 'май', 'июн', 'июл', 'август', 'сентябр', 'октябр', 'ноябр', 'декабр'],
    'months_short' => ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'],
    'weekdays' => ['Якшанба', 'Душанба', 'Сешанба', 'Чоршанба', 'Пайшанба', 'Жума', 'Шанба'],
    'weekdays_short' => ['Якш', 'Душ', 'Сеш', 'Чор', 'Пай', 'Жум', 'Шан'],
    'weekdays_min' => ['Як', 'Ду', 'Се', 'Чо', 'Па', 'Жу', 'Ша'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 1,
];
