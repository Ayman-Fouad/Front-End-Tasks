class Person{
    protected name : string;
    protected address : string;

    constructor(name : string , address : string){
        this.name = name,
        this.address = address;
    }
    set Name(name :string){
        this.name = name;
    }
    set Address(address :string){
        this.address = address;
    }
    getName() :string{
        return this.name;
    }
    getAddress() :string{
        return this.address;
    }
    getInfo() :void{
        console.log(`Person Name is ${this.name} \n Person Address is ${this.address}`);
    }

}
let p = new Person('john' , 'egypt');
p.getInfo();

class Student extends Person{
    private program : string;
    private year : number;
    private fee : [string , number];
    constructor(name : string , address : string , program : string , year : number , fee : [string , number]){
        super(name , address);
        this.program = program,
        this.year = year,
        this.fee = fee;
    }
        set Program(program :string){
            this.program = program;
        }
        set Year(year :number){
            this.year = year;
        }
        set Fee(fee :[string , number]){
            this.fee = fee;
        }
        getProgram() :string{
            return this.program;
        }
        getYear() :number{
            return this.year;
        }
        getFee() :[string , number]{
            return this.fee;
        }
        getInfo() :void{
            console.log(`Student Name is ${this.name} \n Student Address is ${this.address}
    Student Program is ${this.program} \n Student Year is ${this.year} \n Student Fee is ${this.fee}`);
        }
}
let s = new Student('Ross' , 'USA' , 'Programming' , 2019 , ['per year' ,2000]);
s.getInfo();

class Staff extends Person{
    private school : string;
    private pay : [number , string];
    constructor(name : string , address : string , school : string , pay : [number , string]){
        super(name , address);
        this.school = school;
        this.pay = pay;
    }
    set School(school : string){
        this.school = school;
    }
    set Pay(pay : [number , string]){
        this.pay = pay;
    }
    getSchool() : string{
        return this.school;
    }
    getPay() : [number , string]{
        return this.pay;
    }
    getInfo() :void{
        console.log(`Person Name is ${this.name} \n Person Address is ${this.address}
    Person School is ${this.school} \n Person Pay is ${this.pay}`);
    }
}
let stf = new Staff('Ahmed' , 'Egypt' , 'British School' , [10000 , 'per semester']);
stf.getInfo();