<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Authors:
 * - Jens Herlevsen
 */
return [
    'year' => ':count år|:count år',
    'a_year' => 'et år|:count år',
    'y' => ':count år|:count år',
    'month' => ':count måned|:count måneder',
    'a_month' => 'en måned|:count måneder',
    'm' => ':count mån.',
    'week' => ':count uge|:count uger',
    'a_week' => 'en uge|:count uger',
    'w' => ':count u.',
    'day' => ':count dag|:count dage',
    'a_day' => 'en d.',
    'd' => ':count dag|:count dage',
    'hour' => ':count time|:count timer',
    'a_hour' => 'en time|:count timer',
    'h' => ':count t.',
    'minute' => ':count minut|:count minutter',
    'a_minute' => 'et minut|:count minutter',
    'min' => ':count min.',
    'second' => ':count sekund|:count sekunder',
    'a_second' => 'få sekunder|:count sekunder',
    's' => ':count s.',
    'ago' => ':time siden',
    'from_now' => 'om :time',
    'after' => ':time efter',
    'before' => ':time før',
    'formats' => [
        'LT' => 'HH:mm',
        'LTS' => 'HH:mm:ss',
        'L' => 'DD.MM.YYYY',
        'LL' => 'D. MMMM YYYY',
        'LLL' => 'D. MMMM YYYY HH:mm',
        'LLLL' => 'dddd [d.] D. MMMM YYYY [kl.] HH:mm',
    ],
    'calendar' => [
        'sameDay' => '[i dag kl.] LT',
        'nextDay' => '[i morgen kl.] LT',
        'nextWeek' => 'på dddd [kl.] LT',
        'lastDay' => '[i går kl.] LT',
        'lastWeek' => '[i] dddd[s kl.] LT',
        'sameElse' => 'L',
    ],
    'ordinal' => ':number.',
    'months' => ['januar', 'februar', 'marts', 'april', 'maj', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'december'],
    'months_short' => ['jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'],
    'weekdays' => ['søndag', 'mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag', 'lørdag'],
    'weekdays_short' => ['søn', 'man', 'tir', 'ons', 'tor', 'fre', 'lør'],
    'weekdays_min' => ['sø', 'ma', 'ti', 'on', 'to', 'fr', 'lø'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => [', ', ' og '],
];
