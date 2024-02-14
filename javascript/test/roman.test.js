const { transformNumber } = require('../src/roman');

describe("Roman Numerals", function () {

  it("is_true_when_true", function () {
   var result = transformNumber();
      expect(result).toBe(true);
  });

});
