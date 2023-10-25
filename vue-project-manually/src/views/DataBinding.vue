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
<!-- **************************************** Form 입력 데이터 바인딩 **************************************** -->
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
      checked2: []
    }
  },
  methods: {}
}
</script>
