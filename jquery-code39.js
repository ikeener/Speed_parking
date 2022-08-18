

(function ($) {

  var defaultSettings = {
      barWidth: 2,
      barHeight: 70,
      showHRI: true,
      marginHRI: 5,
      bgColor: "#fff",
      color: "#000",
      fontSize: 13,
    };

  // * * * * * * * * * * * * * * * * * * * * * *
  // code 39
  // * * * * * * * * * * * * * * * * * * * * * *

  var encodingCode39 = ["101001101101", "110100101011", "101100101011", "110110010101",
    "101001101011", "110100110101", "101100110101", "101001011011",
    "110100101101", "101100101101", "110101001011", "101101001011",
    "110110100101", "101011001011", "110101100101", "101101100101",
    "101010011011", "110101001101", "101101001101", "101011001101",
    "110101010011", "101101010011", "110110101001", "101011010011",
    "110101101001", "101101101001", "101010110011", "110101011001",
    "101101011001", "101011011001", "110010101011", "100110101011",
    "110011010101", "100101101011", "110010110101", "100110110101",
    "100101011011", "110010101101", "100110101101", "100100100101",
    "100100101001", "100101001001", "101001001001", "100101101101"];

  function getDigitCode39(code) {
    var i, index,
      result = "",
      table = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ-. $/+%*",
      intercharacter = "0";

    if (code.indexOf("*") >= 0) {
      return "";
    }

    // Add Start and Stop charactere : *
    code = ("*" + code + "*").toUpperCase();

    for (i = 0; i < code.length; i++) {
      index = table.indexOf(code.charAt(i));
      if (index < 0) {
        return "";
      }
      if (i > 0) {
        result += intercharacter;
      }
      result += encodingCode39[index];
    }
    return result;
  }

  // * * * * * * * * * * * * * * * * * * * * * *
  // tools
  // * * * * * * * * * * * * * * * * * * * * * *

  function intval(val) {
    var type = typeof val;
    if (type === "string") {
      val = val.replace(/[^0-9-.]/g, "");
      val = parseInt(val * 1, 10);
      return isNaN(val) || !isFinite(val) ? 0 : val;
    }
    return type === "number" && isFinite(val) ? Math.floor(val) : 0;
  }

  // convert a bit string to an array of array of bit char
  function bitStringTo2DArray(digit) {
    var i,
      d = [];
    d[0] = [];
    for (i = 0; i < digit.length; i++) {
      d[0][i] = parseInt(digit.charAt(i), 10);
    }
    return d;
  }

  // clear jQuery Target
  function resize($container, w) {
    $container
      .css("padding", "0")
      .css("overflow", "auto")
      .css("width", w + "px")
      .html("");
    return $container;
  }

  // apply antialiasing for CSS rendering only
  function antialiasing($container){
    $container
      .css("display", "flex")
      .css("flex-flow", "row wrap")
      .css("justify-content", "space-around");
    return $container;
  }

  // * * * * * * * * * * * * * * * * * * * * * *
  // Raw Renderer functions
  // * * * * * * * * * * * * * * * * * * * * * *

  // css barcode renderer
  function digitToCssRenderer($container, settings, digit, hri, mw, mh) {
    var x, y, len, current,
      lines = digit.length,
      columns = digit[0].length,
      content = "",
      bar0 = "<div style=\"float: left; font-size: 0; background-color: " + settings.bgColor + "; height: " + mh + "px; width: &Wpx\"></div>",
      bar1 = "<div style=\"float: left; font-size: 0; width:0; border-left: &Wpx solid " + settings.color + "; height: " + mh + "px;\"></div>";
    for (y = 0; y < lines; y++) {
      len = 0;
      current = digit[y][0];
      for (x = 0; x < columns; x++) {
        if (current === digit[y][x]) {
          len++;
        } else {
          content += (current ? bar1 : bar0).replace("&W", len * mw);
          current = digit[y][x];
          len = 1;
        }
      }
      if (len > 0) {
        content += (current ? bar1 : bar0).replace("&W", len * mw);
      }
    }
    if (settings.showHRI) {
      content += "<div style=\"clear:both; width: 100%; background-color: " + settings.bgColor + "; color: " + settings.color + "; text-align: center; font-size: " + settings.fontSize + "px; margin-top: " + settings.marginHRI + "px;\">" + hri + "</div>";
    }
    antialiasing($container);
    resize($container, mw * columns).html(content);
  }


  // * * * * * * * * * * * * * * * * * * * * * *
  // Renderer
  // * * * * * * * * * * * * * * * * * * * * * *

  var renderer = {};
  
  // css 1D barcode renderer
  renderer.css = function ($container, settings, digit, hri) {
    var w = intval(settings.barWidth),
      h = intval(settings.barHeight);
    digitToCssRenderer($container, settings, bitStringTo2DArray(digit), hri, w, h);
  };

 

  $.fn.code39 = function (data, settings) {
    var code, crc, rect, fn,
      digit = "",
      hri   = "",
      b2d   = false;

    data = $.extend({crc: true, rect: false}, typeof data === "object" ? data : {code: data});

    code  = data.code;
    crc   = data.crc;
    rect  = data.rect;

    if (code) {
      settings = $.extend(true, defaultSettings, settings);
      digit = getDigitCode39(code);
      hri = code;
 
      if (digit.length) {
        // Quiet Zone

        digit = "0000000000" + digit + "0000000000";

        fn = renderer.css;
        if (fn) {
          this.each(function () {
            fn($(this), settings, digit, hri);
          });
        }
      }
    }
    return this;
  };

}(jQuery));
