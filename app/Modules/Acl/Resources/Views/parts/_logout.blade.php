<form id="logout-form" action="{{ route('logout', ['lang'=>abbr()]) }}" method="POST">
    {{ csrf_field() }}

    <button type="submit" class="logout-button"><i class="fa fa-sign-out"></i>{{ t('admin__btn__logout', 'Выйти') }}</button>
</form>