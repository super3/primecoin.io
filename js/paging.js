(function($) {
    var Paging = function(ele, options, call) {
        that = this;
        this.ele = ele;
        this.defaults = {
            numberPage: 5
        };
        this.call = call;
        this.options = $.extend({},
            this.defaults, options);
        this.activePage = 1;
        console.log(this.ele)
    };
    Paging.prototype = {
        init: function() {
            if (this.options.total > 0) {
                this.pageNumber = Math.ceil(this.options.total / this.options.numberPage);
                this.initButton();
            }
            return this.ele;
        },
        initButton: function() {
            this.ele.empty().append("<button class='prePage'><<</button>");
            for (var i = 0; i < this.pageNumber; i++) {
                var num = parseInt(i + 1);
                if (this.pageNumber > 6) {
                    if (num > this.pageNumber - 3) {
                        this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                    }
                    if (num < 4) {
                        this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                        if (num == 3) {
                            this.ele.append("<span>...</span>")
                        }
                    }
                } else {
                    this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                }
                if (i == this.pageNumber - 1) {
                    this.ele.append("<button class='nextPage'>>></button>");
                    this.ele.find("[value=1]").addClass("activity");
                    this.events()
                }
            }
        },
        events: function() {
            var that = this;
            this.ele.find(".pageButton").on("click",
                function() {
                    that.activePage = $(this).val();
                    that.call(that.activePage);
                    that.styles($(this).val())
                });
            this.ele.find(".nextPage").on("click",
                function() {
                    if (that.activePage < that.pageNumber) {
                        that.activePage = parseInt(that.activePage) + 1;
                        that.call(that.activePage);
                        that.styles(that.activePage)
                    }
                });
            this.ele.find(".prePage").on("click",
                function() {
                    if (that.activePage > 1) {
                        that.activePage -= 1;
                        that.call(that.activePage);
                        that.styles(that.activePage)
                    }
                })
        },
        styles: function(val) {
            if (val > 2 && val < this.pageNumber - 1 && this.pageNumber > 6) {
                this.ele.empty().append("<button class='prePage'><<</button>");
                if (val > 3) {
                    this.ele.append("<button class='pageButton' value='1'>1</button>");
                }
                if (val > 4) {
                    this.ele.append("<span>...</span>")
                }
                this.ele.append("<button class='pageButton' value='" + parseInt(val - 2) + "'>" + parseInt(val - 2) + "</button>");
                this.ele.append("<button class='pageButton' value='" + parseInt(val - 1) + "'>" + parseInt(val - 1) + "</button>");
                this.ele.append("<button class='pageButton' value='" + parseInt(val) + "'>" + parseInt(val) + "</button>");
                var num = parseInt(val) + 1;
                this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                var num = parseInt(val) + 2;
                this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                if (val < this.pageNumber - 3) {
                    this.ele.append("<span>...</span>")
                }
                if (val < this.pageNumber - 2) {
                    this.ele.append("<button class='pageButton' value='" + this.pageNumber + "'>" + this.pageNumber + "</button>")
                }
                this.ele.append("<button class='nextPage'>>></button>");
            }
            if (val <= 2 && this.pageNumber > 6) {
                this.ele.empty().append("<button class='prePage'><<</button>");
                this.ele.append("<button class='pageButton' value='1'>1</button>");
                this.ele.append("<button class='pageButton' value='2'>2</button>");
                this.ele.append("<button class='pageButton' value='3'>3</button>");
                this.ele.append("<span>...</span>");
                var num = parseInt(this.pageNumber) - 2;
                this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                var num = parseInt(this.pageNumber) - 1;
                this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                this.ele.append("<button class='pageButton' value='" + this.pageNumber + "'>" + this.pageNumber + "</button>");
                this.ele.append("<button class='nextPage'>>></button>");
            }
            if (val >= this.pageNumber - 1 && this.pageNumber > 6) {
                this.ele.empty().append("<button class='prePage'><<</button>");
                this.ele.append("<button class='pageButton' value='1'>1</button>");
                this.ele.append("<button class='pageButton' value='2'>2</button>");
                this.ele.append("<button class='pageButton' value='3'>3</button>");
                this.ele.append("<span>...</span>");
                var num = parseInt(this.pageNumber) - 2;
                this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                var num = parseInt(this.pageNumber) - 1;
                this.ele.append("<button class='pageButton' value='" + num + "'>" + num + "</button>");
                this.ele.append("<button class='pageButton' value='" + this.pageNumber + "'>" + this.pageNumber + "</button>");
                this.ele.append("<button class='nextPage'>>></button>");
            }
            if (this.pageNumber > 6) {
                this.events();
            }
            this.ele.find(".pageButton").removeClass("activity");
            this.ele.find("[value=" + val + "]").addClass("activity");
        }
    };
    $.fn.paging = function(options, call) {
        var paging = new Paging(this, options, call);
        return paging.init();
    };
})(jQuery);