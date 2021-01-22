var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Person = /** @class */ (function () {
    function Person(name, address) {
        this.name = name,
            this.address = address;
    }
    Object.defineProperty(Person.prototype, "Name", {
        set: function (name) {
            this.name = name;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Person.prototype, "Address", {
        set: function (address) {
            this.address = address;
        },
        enumerable: false,
        configurable: true
    });
    Person.prototype.getName = function () {
        return this.name;
    };
    Person.prototype.getAddress = function () {
        return this.address;
    };
    Person.prototype.getInfo = function () {
        console.log("Person Name is " + this.name + " \n Person Address is " + this.address);
    };
    return Person;
}());
var p = new Person('john', 'egypt');
p.getInfo();
var Student = /** @class */ (function (_super) {
    __extends(Student, _super);
    function Student(name, address, program, year, fee) {
        var _this = _super.call(this, name, address) || this;
        _this.program = program,
            _this.year = year,
            _this.fee = fee;
        return _this;
    }
    Object.defineProperty(Student.prototype, "Program", {
        set: function (program) {
            this.program = program;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Student.prototype, "Year", {
        set: function (year) {
            this.year = year;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Student.prototype, "Fee", {
        set: function (fee) {
            this.fee = fee;
        },
        enumerable: false,
        configurable: true
    });
    Student.prototype.getProgram = function () {
        return this.program;
    };
    Student.prototype.getYear = function () {
        return this.year;
    };
    Student.prototype.getFee = function () {
        return this.fee;
    };
    Student.prototype.getInfo = function () {
        console.log("Student Name is " + this.name + " \n Student Address is " + this.address + "\n    Student Program is " + this.program + " \n Student Year is " + this.year + " \n Student Fee is " + this.fee);
    };
    return Student;
}(Person));
var s = new Student('Ross', 'USA', 'Programming', 2019, ['per year', 2000]);
s.getInfo();
var Staff = /** @class */ (function (_super) {
    __extends(Staff, _super);
    function Staff(name, address, school, pay) {
        var _this = _super.call(this, name, address) || this;
        _this.school = school;
        _this.pay = pay;
        return _this;
    }
    Object.defineProperty(Staff.prototype, "School", {
        set: function (school) {
            this.school = school;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Staff.prototype, "Pay", {
        set: function (pay) {
            this.pay = pay;
        },
        enumerable: false,
        configurable: true
    });
    Staff.prototype.getSchool = function () {
        return this.school;
    };
    Staff.prototype.getPay = function () {
        return this.pay;
    };
    Staff.prototype.getInfo = function () {
        console.log("Person Name is " + this.name + " \n Person Address is " + this.address + "\n    Person School is " + this.school + " \n Person Pay is " + this.pay);
    };
    return Staff;
}(Person));
var stf = new Staff('Ahmed', 'Egypt', 'British School', [10000, 'per semester']);
stf.getInfo();
