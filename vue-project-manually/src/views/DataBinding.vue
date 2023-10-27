<template>
  <!-- 데이터 바인딩 -->

  <!-- 문자열 데이터 바인딩 -->
  <!-- HTML에 텍스트로 바인딩 시킬 때는 이중 중괄호({{}})를 사용한다 -->
  <h1>Hello, {{ title }}!</h1>

  <!-- raw(원시) HTML 데이터 바인딩 -->
  <!-- 아래처럼 사용하면 HTML태그가 아니라 문자열, 즉, 텍스트로 인식하게 된다. -->
  <div>{{ htmlString }}</div>
  <!-- 아래처럼 입력하면 HTML태그로 인식한다. -->
  <div v-html="htmlString"></div>

<!-- **************************************** Form 입력 데이터 바인딩 **************************************** -->
  <!-- input type="text" 사용자에게 텍스트값을 받을 때 -->
  <div>
    <input type="text" v-model="valueModel">
  </div>

  <!-- input type="number" 사용자에게 숫자값을 받을 때 -->
  <div>
    <input type="number" v-model.number="numberModel">
  </div>

  <!-- 사용자에게 Textarea의 내용을 받을 때 -->
  <div>
    <textarea v-model="message"></textarea>
  </div>

  <!-- 사용자에게 Select의 값을 받을 때 -->
  <div>
    <select v-model="city">
      <option value="02">서울</option>
      <option value="21">부산</option>
      <option value="064">제주</option>
    </select>
  </div>

  <!-- 체크박스(input type="checkbox") 하나의 값을 받을 때 -->
    <!-- 체크되어 여부를 정할 때 -->
    <div>
      <label for=""><input type="checkbox" v-model="checked">
        {{ checked }}
      </label>
    </div>

    <!-- 체크되었을 때의 값을 정하고싶을 때 -->
    <div>
      <label for=""><input type="checkbox" v-model="checked1" true-value="yes" false-value="no">
        {{ checked1 }}
      </label>
    </div>

  <!-- 체크박스(input type="checkbox") 여러개의 값을 받을 때 -->
  <div>
    <label for=""><input type="checkbox" v-model="checked2" value="서울">
      서울
    </label>
    <label for=""><input type="checkbox" v-model="checked2" value="부산">
      부산
    </label>
    <label for=""><input type="checkbox" v-model="checked2" value="제주">
      제주
    </label>
    <br>
    <span>체크한 지역: {{ checked2 }}</span>
  </div>

  <!-- 라디오버튼 input type="radio" v-bind:value를 사용하여 바인딩한다 -->
  <div>
    <label for=""><input type="radio" v-bind:value="radioValue1" v-model="picked">
      서울
    </label>
    <label for=""><input type="radio" v-bind:value="radioValue2" v-model="picked">
      부산
    </label>
    <label for=""><input type="radio" v-bind:value="radioValue3" v-model="picked">
      제주
    </label>
    <br>
    <span>선택한 지역: {{ picked }}</span>
  </div>
<!-- **************************************** Form 입력 데이터 바인딩 **************************************** -->

<!-- 이미지(img) 객체의 src v-bind:src를 사용하여 바인딩 -->
<div><img v-bind:src="imgSrc"></div>

<!-- button 객체의 disaabled 특정한 조건이 true일 때 버튼을 비활성화 시킨다. -->
<div>
  <input type="text" v-model="textValue">
  <button type="button" v-bind:disabled="textValue == ''">Click</button>
</div>

<!-- 클래스 바인딩 v-bind:class -->
<!-- 특정 조건에 따른 바인딩 처리를 true/false로 가능 -->
<div class="container" v-bind:class="{'active': isActive, 'text-red': hasError}">Class Binding</div>

<!-- 인라인 스타일 바인딩 -->
<!-- 데이터를 오브젝트로 선언해서 바인딩할 수 있다. -->
<div v-bind:style="styleObject">인라인 스타일 바인딩</div>

<!-- 인라인 스타일 배열로 바인딩 -->
<div v-bind:style="[baseStyle, addStyle]">인라인 스타일 바인딩</div>

<!-- 리스트 랜더링(v-for) -->
<div>
  <table>
    <thead>
      <tr>
        <th>제품명</th>
        <th>가격</th>
        <th>카테고리</th>
        <th>배송료</th>
      </tr>
    </thead>
    <tbody>
      <tr :key="i" v-for="(product, i) in productList">
        <td>{{ product.product_name }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.category }}</td>
        <td>{{ product.delivery_price }}</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- v-if, v-show -->
<!-- v-if와 v-show의 차이점 -->
<!-- v-if는 조건에 맞아야 생성 및 삭제 -->
<!-- v-show는 일단 생성후에 조건에 따라 표시 및 숨김 -->
<!-- 자주 toggle이 되는 블록이면 v-show를 사용하고 빈도가 적으면 v-if를 사용하는것이 좋다. -->
<div>
  <h1 v-if="type == 'A'">A</h1>
  <h1 v-else-if="type == 'B'">B</h1>
  <h1 v-else>C</h1>
  <h1 v-show="type == 'A'">AA</h1>
</div>
</template>
<script>
export default {
  name: 'DdataBinding',
  components: {},
  data () {
    return {
      title: 'World',
      htmlString: '<p style="color:red;">This is a red string.</p>',
      valueModel: 'South Korea',
      numberModel: 3,
      message: '여러 줄을 입력할 수 있는 textarea 입니다.',
      city: '064',
      checked: true,
      checked1: 'no',
      checked2: [],
      radioValue1: '서울',
      radioValue2: '부산',
      radioValue3: '제주',
      picked: '',
      imgSrc: 'https://kr.vuejs.org/images/logo.png',
      textValue: '',
      isActive: true,
      hasError: false,
      styleObject: {
        color: 'red',
        fontSize: '13px'
      },
      baseStyle: 'background-color:green; width:100%;height:200px;',
      addStyle: 'color:white; font-weight:bold;',
      productList: [
        { product_name: '기계식키보드', price: 25000, category: '노트북/테블릿', delivery_price: 5000 },
        { product_name: '무선마우스', price: 12000, category: '노트북/테블릿', delivery_price: 5000 },
        { product_name: '아이패드', price: 725000, category: '노트북/테블릿', delivery_price: 5000 },
        { product_name: '태블릿거치대', price: 32000, category: '노트북/테블릿', delivery_price: 5000 },
        { product_name: '무선충전기', price: 42000, category: '노트북/테블릿', delivery_price: 5000 }
      ],
      type: 'A'
    }
  },
  methods: {}
}
</script>
<style>
  .container {
    width: 100%;
    height: 200px;
  }
  .active {
    background-color: yellow;
    font-weight: bold;
  }
  .text-red{
    color:red;
  }
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
</style>
