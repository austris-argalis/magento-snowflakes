/**
 * @author austris
 * @copyright Copyright (c) 2018
 */

define([
    'jquery',
    'jquery/ui',
    'magic-snowflakes'
], function ($, ui, Snowflakes) {
    "use strict";

    $.widget('magic.Snowflakes', {
        options: {/* configured in block */},

        _create: function () {
            new Snowflakes({
                color: this.options.color,
                count: this.options.count,
                minOpacity: this.options.minOpacity,
                maxOpacity: this.options.maxOpacity,
                minSize: this.options.minSize,
                maxSize: this.options.maxSize,
                rotation: this.options.rotation,
                speed: this.options.speed,
                wind: this.options.wind,
                width: this.options.width,
                height: this.options.height,
                zIndex: this.options.zIndex
            });
        },
    });

    return $.magic.Snowflakes;
});