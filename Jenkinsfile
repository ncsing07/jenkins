pipeline {
    agent none
    stages {
        stage("first") {
            steps {
                script {
                    def foo = "foo" 
                    sh "echo ${foo}"
                }
            }
        }
    }
}

