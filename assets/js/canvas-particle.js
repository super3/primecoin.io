var CanvasParticle = (function () {
    function canvasInit(canvasConfig) {
        canvasConfig = canvasConfig || {};
        var header = document.getElementsByTagName("header")[0]
        var canvasObj = document.getElementsByTagName("canvas")[0];
        var canvas = {
            element: canvasObj,
            points: [],
            // default setting
            config: {
                vx: canvasConfig.vx || 4,
                vy: canvasConfig.vy || 4,
                height: canvasConfig.height || 2,
                width: canvasConfig.width || 8,
                count: canvasConfig.count || 100,
                color: canvasConfig.color || "121, 162, 185",
                stroke: canvasConfig.stroke || "130,255,255",
                dist: canvasConfig.dist || 6000,
                e_dist: canvasConfig.e_dist || 20000,
                max_conn: 10
            }
        };

        if (canvas.element.getContext("2d")) {
            canvas.context = canvas.element.getContext("2d");
        } else {
            return null;
        }

        canvasSize(canvas.element);
        window.onresize = function () {
            canvasSize(canvas.element);
        }
        header.onmousemove = function (e) {
            var event = e || window.event;
            canvas.mouse = {
                x: event.clientX,
                y: event.clientY
            }
        }
        document.onmouseleave = function () {
            canvas.mouse = undefined;
        }
        setInterval(function () {
            drawPoint(canvas);
        }, 40);
    }

    function canvasSize(canvas) {
        // setting background size
        var height = parseInt($("header.header").css("height"));
        var width = $("header.header").width()
        canvas.width = width;
        canvas.height = height;
    }

    // setting points
    function drawPoint(canvas) {
        var context = canvas.context,
            point,
            dist;
        context.clearRect(0, 0, canvas.element.width, canvas.element.height);
        context.beginPath();
        context.fillStyle = "rgb(" + canvas.config.color + ")";
        for (var i = 0, len = canvas.config.count; i < len; i++) {
            if (canvas.points.length != canvas.config.count) {
                // Initialize all the points
                point = {
                    x: Math.floor(Math.random() * canvas.element.width),
                    y: Math.floor(Math.random() * canvas.element.height),
                    vx: canvas.config.vx / 2 - Math.random() * canvas.config.vx,
                    vy: canvas.config.vy / 2 - Math.random() * canvas.config.vy
                }
            } else {
                /*setting the speed and position of the ball*/
                point = borderPoint(canvas.points[i], canvas);
            }
            context.fillRect(point.x - canvas.config.width / 2, point.y - canvas.config.height / 2, canvas.config.width,canvas.config.width);
            canvas.points[i] = point;
        }
        drawLine(context, canvas, canvas.mouse);
        context.closePath();
    }

    // border
    function borderPoint(point, canvas) {
        var p = point;
        if (point.x <= 0 || point.x >= canvas.element.width) {
            p.vx = -p.vx;
            p.x += p.vx;
        } else if (point.y <= 0 || point.y >= canvas.element.height) {
            p.vy = -p.vy;
            p.y += p.vy;
        } else {
            p = {
                x: p.x + p.vx,
                y: p.y + p.vy,
                vx: p.vx,
                vy: p.vy
            }
        }
        return p;
    }

    // setting line
    function drawLine(context, canvas, mouse) {
        context = context || canvas.context;
        for (var i = 0, len = canvas.config.count; i < len; i++) {
            // Initialize the maximum number of connections
            canvas.points[i].max_conn = 0;
            // point to point
            for (var j = 0; j < len; j++) {
                if (i != j) {
                    dist = Math.round(canvas.points[i].x - canvas.points[j].x) * Math.round(canvas.points[i].x - canvas.points[j].x) +
                        Math.round(canvas.points[i].y - canvas.points[j].y) * Math.round(canvas.points[i].y - canvas.points[j].y);
                    // The distance between two points is less than the adsorption distance and less than the maximum number of connections, then draw the line
                    if (dist <= canvas.config.dist && canvas.points[i].max_conn < canvas.config.max_conn) {
                        canvas.points[i].max_conn++;
                        // The farther away the line, the thinner and more transparent it is
                        context.lineWidth = 0.5 - dist / canvas.config.dist;
                        context.strokeStyle = "rgba(" + canvas.config.stroke + ",0.1)"
                        // context.strokeStyle = "rgba(" + canvas.config.stroke + "," + (1 - dist / canvas.config.dist) + ")"

                        context.beginPath();
                        context.moveTo(canvas.points[i].x, canvas.points[i].y);
                        context.lineTo(canvas.points[j].x, canvas.points[j].y);
                        context.stroke();

                    }
                }
            }
            // point to mouse
            if (mouse) {
                dist = Math.round(canvas.points[i].x - mouse.x) * Math.round(canvas.points[i].x - mouse.x) +
                    Math.round(canvas.points[i].y - mouse.y) * Math.round(canvas.points[i].y - mouse.y);
                /*When the mouse reaches the adsorption distance of the dot, the dot is accelerated,
                and the value of x and y of the dot is directly changed to achieve the acceleration effect*/
                if (dist > canvas.config.dist && dist <= canvas.config.e_dist) {
                    canvas.points[i].x = canvas.points[i].x + (mouse.x - canvas.points[i].x) / 20;
                    canvas.points[i].y = canvas.points[i].y + (mouse.y - canvas.points[i].y) / 20;
                }
                if (dist <= canvas.config.e_dist) {
                    context.lineWidth = 1;
                    context.strokeStyle = "rgba(" + canvas.config.stroke + ",0.1)";

                    context.beginPath();
                    context.moveTo(canvas.points[i].x, canvas.points[i].y);
                    context.lineTo(mouse.x, mouse.y);
                    context.stroke();
                }
            }
        }
    }

    return canvasInit;
})();

$(function () {

        //config
        var config = {
            vx: 4, //The velocity of the ball on the X-axis
            vy: 4, //The velocity of the ball on the Y-axis
            height: 3, //point size
            width: 3,
            count: 100, //Number of points
            color: "121, 162, 185", //point color
            stroke: "130,255,255", //line color
            dist: 6000, //Point adsorption distance
            e_dist: 20000, //Mouse adsorption acceleration distance
            max_conn: 10 //The maximum number of connections from point to point
        }

        CanvasParticle(config);
    }
)