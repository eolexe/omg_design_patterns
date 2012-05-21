class SalonServiceDecoratorBase
  def initialize(salonService)
    @decoratedSalonService = salonService
  end

  def getDescription
    @decoratedSalonService
  end
end